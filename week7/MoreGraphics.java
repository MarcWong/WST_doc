import java.applet.*;
import javax.swing.*;
import java.awt.*;

public class MoreGraphics extends JApplet {
  Container graphicArea = getContentPane();
  myPanel newPanel = new myPanel();
  static String shape, fill;
  static Color color;
  public void init() {
    String para = getParameter("shape");
    shape = para;
    para = getParameter("color");
    if(para.equals("Red"))color = Color.RED;
    else if(para.equals("Blue"))color = Color.BLUE;
    else if(para.equals("Yellow"))color = Color.YELLOW;
    else if(para.equals("Green"))color = Color.GREEN;
    else if(para.equals("Black"))color = Color.BLACK;
    para = getParameter("fill");
    fill = para;
    graphicArea.add(newPanel);
  }
}
class myPanel extends JPanel {
  public void paintComponent(Graphics grafObj) {
    super.paintComponent(grafObj); 
    grafObj.setColor(MoreGraphics.color);
    if(MoreGraphics.shape.equals("Circle")){
      grafObj.drawOval(70, 50, 100, 100);
      if(MoreGraphics.fill.equals("Filled"))grafObj.fillOval(70, 50, 100, 100);
    }
    else if(MoreGraphics.shape.equals("Rectangle")){
      grafObj.drawRect(70, 50, 120, 100);
      if(MoreGraphics.fill.equals("Filled"))grafObj.fillRect(70, 50,120, 100);
    }
    else if(MoreGraphics.shape.equals("Triangle")){
      grafObj.drawLine(30, 150, 150, 150);
      grafObj.drawLine(30, 150, 90, 47);
      grafObj.drawLine(150, 150, 90, 47);
      if(MoreGraphics.fill.equals("Filled")){
        int[] x = {30, 150, 90};
        int[] y = {150, 150, 47};
        grafObj.fillPolygon(x,y,3);
      }
    }
  }
}
