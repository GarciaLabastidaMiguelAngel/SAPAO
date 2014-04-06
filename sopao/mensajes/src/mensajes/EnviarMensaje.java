/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package mensajes;

import java.util.logging.Level;
import java.util.logging.Logger;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

/**
 *
 * @author miguel
 */
public class EnviarMensaje extends Thread{
    
   
   // protected int intentos=1;
    //protected boolean exito=false;
    //protected boolean continua=true;
    private String id_telegram;
    private String msg;
    
    public EnviarMensaje(String id_telegram,String msg){
        this.id_telegram=id_telegram;
        this.msg=msg;
        
    }
    
    private void enviar(){
        Conexion c=new Conexion(id_telegram,msg);
        c.conexionSSH(id_telegram+".txt");
        try {
            sleep(1000);
        } catch (InterruptedException ex) {
            Logger.getLogger(EnviarMensaje.class.getName()).log(Level.SEVERE, null, ex);
        }
        ManejadorArchivos salida=new ManejadorArchivos("sal"+id_telegram+".txt");
      /*  salida.abrirArchivoParaLectura();
        String line;
        while((line=salida.leerArchivo())!=null){
            Pattern p = Pattern.compile("^send:$");
            Matcher m = p.matcher(line);
            if (m.find())
                exito=true;
        
        }
        intentos--;
              */
       salida.eliminarArchivo();
    }
    
    /*public void parar(){
        continua=false;
    }*/
    
    
    public void run()
   {
     enviar();
      }
    
}
