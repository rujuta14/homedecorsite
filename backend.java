/*import java.io.IOException; import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
public class Backend extends HttpServlet {
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
        throws ServletException, IOException {
    String name request.getParameter("name");
    String email request.getParameter("email");

    //Process the data or perform any backend tasks
    //Return a response back to the frontend
    response.setContentType("text/html");
    PrintWriter out response.getWriter();
    out.println("<h1>Data received successfully!</h1>");
    }
}*/

import java.sql.Connection;
import java.sql.Driver;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
public class backend{
    public static void main(String[]args)
    {
        String url="jdbc::mysql://localhost::3306/project";
        String username="root";
        String password="";
        try{
            Class.forName("com.mysql.cj.jdbc.Driver");
            Connection connection=DriverManager.getConnection(url, username, password);
            Statement statement=connection.createStatement();
            ResultSet resultSet=statement.executeQuery("Select * from login");

            while(resultSet.next())
            {
                System.out.println(resultSet.getInt(1)+" "+resultSet.getString(2)+" "+resultSet.getString(3));
            }
            connection.close();
        }
    
        catch(Exception e)
        {
        System.out.println(e);
        }
    }
}
