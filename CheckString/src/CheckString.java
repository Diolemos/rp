

import java.util.Scanner;

public class CheckString {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        
        
        System.out.print("Digite uma string: ");
        String input = scanner.nextLine();
        
        
        int count = 0;
        
      
        for (int i = 0; i < input.length(); i++) {
            char ch = input.charAt(i);
            
          
            if (ch == 'a' || ch == 'A') {
                count++;
            }
        }
        
       
        if (count > 0) {
            System.out.println("A letra 'a' aparece " + count + " vez(es) na string.");
        } else {
            System.out.println("A letra 'a' não foi encontrada na string.");
        }
        
        scanner.close();
    }
}