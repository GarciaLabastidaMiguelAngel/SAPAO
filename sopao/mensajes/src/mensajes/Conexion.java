/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package mensajes;

import com.jcraft.jsch.ChannelShell;
import com.jcraft.jsch.JSch;
import com.jcraft.jsch.JSchException;
import com.jcraft.jsch.Session;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.InputStream;

/**
 *
 * @author miguel
 */
public class Conexion {
  private  JSch jsch;
  private Session sesion;
  private ChannelShell consola;

   
  public Conexion(String id_telegram,String msg){
      
          ManejadorArchivos comandos=new ManejadorArchivos(id_telegram+".txt");
          comandos.abrirArchivoParaEscritura();
          comandos.escribirArchivo("cd /home/miguel/Documentos/tg");
          comandos.escribirArchivo("./telegram");
          comandos.escribirArchivo("msg user"+id_telegram+" "+msg);
          comandos.cerrarArchivoEscritura();
     
  }
  
  public  boolean conexionSSH(String origen) {
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
             is= new FileInputStream (origen);
        } catch (FileNotFoundException ex) {
             System.out.print(ex);
        }
      consola.setInputStream(is);
        try {
            consola.setOutputStream(new FileOutputStream("sal"+origen));
        } catch (FileNotFoundException ex) {
            System.out.print(ex);
            return false;
        }      
      // Conectamos nuestro canal
      consola.connect();

    } catch(JSchException e) {
      System.out.println("Error de JSCH. Mensaje: "+e.getMessage());
    }
    return false;
  }

 
  
}
