import java.applet.Applet;
import java.awt.Color;
import java.awt.Graphics;
import java.util.Scanner;
import java.lang.String;
/** 
 * frist
 */
public class frist extends Applet {

    public static void main(String[] args) {
        String b = new String("fsldfjldsk");
        
        System.out.println(b.length());
        System.out.println(b);
        String a = "klsfjsl";
    }

    public void init(){
        setBackground(Color.BLACK);
        setForeground(Color.GREEN);
        
    }
    public void paint(Graphics g) {
        g.drawString("HELLO KKEK", 150, 150);
    }
}