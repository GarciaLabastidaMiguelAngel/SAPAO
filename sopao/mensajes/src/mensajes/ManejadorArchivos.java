/**
 * @(#)ManejadorArchivos.java
 *
 *
 * @author 
 * @version 1.00 2011/11/28
 */
package mensajes;
import java.io.*;
import java.util.Scanner;

public class ManejadorArchivos {
	    PrintWriter salida;
		BufferedReader entrada;
		String nombreArchivo;//guarda el nombre de archivo a manipular
    
    public ManejadorArchivos(String nombreArchivo) {
    		this.nombreArchivo=nombreArchivo;
    		}
    
    //metodo que escribe en el archivo
    public void escribirArchivo(String dato){
    	try{
    		salida.println(dato);
    	}
    	catch(Exception e){
    		e.printStackTrace();
    	}
    }
    
    //metodo que se encarga de la apertura del archivo
    public void abrirArchivoParaEscritura(){
    	File archivo=new File(nombreArchivo);
            try{
    			if(archivo.exists()==false)
    				archivo.createNewFile();
    			salida=new PrintWriter(new FileWriter(archivo,false));
    			}
    		catch(Exception e){
    		e.printStackTrace();
    		}
    }
    
    //metodo que se encarga del cierre del archivo de escritura
    public void cerrarArchivoEscritura(){
    	try{
    		salida.close();
    	}
    	catch(Exception e){
    		e.printStackTrace();
    	}
    }
    
    //metodo que habre archivo para lectura
    public void abrirArchivoParaLectura(){
    	try{
    		File archivo=new File(nombreArchivo);
    		if(archivo.exists()==false)
    				archivo.createNewFile();
    		entrada=new BufferedReader(new FileReader(archivo));
    	}
    	catch(Exception e){
    		e.printStackTrace();
    	}
    }
   
   //cierra archivo de lectura
   public void cerrarArchivoDeLectura(){
   	try{
   		entrada.close();
   	}
   	catch(Exception e){
   		e.printStackTrace();
   	}
   }
   
    public String leerArchivo(){
       try{
    	return entrada.readLine();
       }
       catch(Exception e){
       	return null;
       }
    }
    
    public void crearArchivo(){
    	File archivo=new File(nombreArchivo);
    	try{
    		if(archivo.exists()==false)
    		           archivo.createNewFile();
    	}
    	catch(Exception e){
    		e.printStackTrace();
    	}
    	
    }
    
    public void eliminarArchivo(){
        File f= new File(nombreArchivo);
        f.delete();
    }
    
    
}