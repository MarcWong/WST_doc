import java.applet.*;
import javax.swing.*;
import java.awt.*;

public class graph extends JApplet{
	Container messageArea = getContentPane();
  	MessagePanel myMessagePanel = new MessagePanel();
  	public void init() {
    	messageArea.add(myMessagePanel);
  }
}
class MessagePanel extends JPanel {
  public void paintComponent(Graphics grafObj) {
    super.paintComponent(grafObj);
    grafObj.setColor(new Color(0, 255, 0));
    grafObj.drawOval(100, 60, 100, 100);
    grafObj.fillOval(100, 60, 100, 100);
    grafObj.setColor(new Color(255, 0, 0));
    grafObj.drawRect(100, 200, 120, 80);
    grafObj.fillRect(100, 200, 120, 80);
  }
}