/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package conexionssh;



public class ConexionSSH {


  
  public static void main(String s[]){
       new Thread(new ConexionMySql()).start();
  }
}