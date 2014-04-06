/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package conexionssh;

import com.mysql.jdbc.Connection;
import com.mysql.jdbc.Statement;
import static java.lang.Thread.sleep;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

/**
 *
 * @author miguel
 */
public class ConexionMySql implements Runnable{
    
    public void verificar(){
        String driver,conexion,usuario,password;
        //driver="com.mysql.jdbc.Driver";// nombre del driver 
        conexion="jdbc:mysql://192.168.2.2:3306/sapao";//jdbc:postgreslq://ubicacion_de_BD:puerto/nombre_BD
        usuario="demonio";
        password="12345";
        try{
 //Class.forName(driver);
        Connection con = (Connection) DriverManager.getConnection(conexion, usuario , password);
        Statement stmt = (Statement) con.createStatement();
 
        ResultSet rs = stmt.executeQuery("SELECT * FROM sapao.usuario where estado=0;");
        e:
        while (rs.next()){
        
        System.out.println("entro a la consulta hay datos");
        ManejadorArchivos archivo=new ManejadorArchivos(rs.getString("telefono")+".txt");
        archivo.crearArchivo();
        archivo.abrirArchivoParaEscritura();
        archivo.escribirArchivo("cd /home/miguel/Documentos/tg");
        archivo.escribirArchivo("./telegram");
        archivo.escribirArchivo("add_contact "+rs.getString("telefono")+" "+rs.getString("telefono")+" "+rs.getString("nombre"));
        archivo.cerrarArchivoEscritura();
        Conexion c=new Conexion();
        c.conexionSSH(rs.getString("telefono")+".txt");
        String a=rs.getString("telefono")+".txt";
        sleep(10000);
        //archivo.eliminarArchivo();
        archivo=new ManejadorArchivos("sal"+rs.getString("telefono")+".txt");
        String line;
        archivo.abrirArchivoParaLectura();
        String id_usuario=rs.getString("id_usuario");
        lectura:
        while((line=archivo.leerArchivo())!=null){
            String id_telegram;
            Pattern p = Pattern.compile("#\\d+");
            Matcher m = p.matcher(line);
            Pattern p2 = Pattern.compile("Not added");
            Matcher m2 = p.matcher(line);
            if (m.find()){
                id_telegram=m.group();
                System.out.println("id_telegram="+id_telegram);
                rs.close();
                stmt.close();
                 con.close();
                 con = (Connection) DriverManager.getConnection(conexion, usuario , password);
                 stmt = (Statement) con.createStatement();
                stmt.executeUpdate("update sapao.usuario set id_telegram='"+id_telegram+"'  where id_usuario="+id_usuario);
                 stmt.executeUpdate("update sapao.usuario set estado=1  where id_usuario="+id_usuario);
                archivo.cerrarArchivoDeLectura();
                 archivo.eliminarArchivo();
                 archivo=new ManejadorArchivos(a);
                 archivo.eliminarArchivo();
      
                 break lectura;
            }
            else
                if(m2.find()){
                    System.out.print("error");
                     stmt.executeUpdate("update sapao.usuario set estado=1  where id_usuario="+id_usuario);
                     archivo.eliminarArchivo();
                 archivo=new ManejadorArchivos(a);
                 archivo.eliminarArchivo();
                }
        }
         }
        
        rs.close();
        
        stmt.close();
        con.close();
 
}
 
catch ( Exception e ){
 System.out.println(e.getMessage());
 }
 

 }

    @Override
    public void run() {
       while(true)
                verificar();
          
    }
}
