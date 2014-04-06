/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package conexionssh;

import com.jcraft.jsch.ChannelShell;
import com.jcraft.jsch.JSch;
import com.jcraft.jsch.JSchException;
import com.jcraft.jsch.Session;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.InputStream;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author miguel
 */
public class Conexion {
  private  JSch jsch;
  private Session sesion;
  private ChannelShell consola;

  
  public  void conexionSSH(String cmd) {
    jsch = new JSch();
    // Es necesario capturar JSchException
    try {

      // NO realizar revision estricta de llaves
      JSch.setConfig("StrictHostKeyChecking", "no");

      // Creamos la nueva sesion SSH
       sesion = jsch.getSession("miguel","127.0.0.1");

      // Establecemos la clave
      sesion.setPassword("miguel");
      
        // Conectamos la sesion
      sesion.connect();

      // Obtenemos un nuevo canal para enviar/recibir comandos
      // de consola
      consola = (ChannelShell) sesion.openChannel("shell");
      InputStream is=null;
        try {
            // Utilizamos la entrada y salida estándar del sistema
            // para recibir comandos y desplegar el resultado
             is= new FileInputStream (cmd);
        } catch (FileNotFoundException ex) {
            Logger.getLogger(ConexionSSH.class.getName()).log(Level.SEVERE, null, ex);
        }
      consola.setInputStream(is);
        try {
            consola.setOutputStream(new FileOutputStream("sal"+cmd));
        } catch (FileNotFoundException ex) {
            Logger.getLogger(ConexionSSH.class.getName()).log(Level.SEVERE, null, ex);
        }
     
      
      
      // Conectamos nuestro canal
      consola.connect();

    } catch(JSchException e) {
      System.out.println("Error de JSCH. Mensaje: "+e.getMessage());
    }
  }

 
  
}
