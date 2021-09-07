// Manthan Patel
// CS280, Section 021

public class Main {
    private static int check =-1;
    
    public static void main(String[] args)
    {
        Main.solve(0,0);
    }
    
    public static boolean solve(int x,int y)
    {
        int[][] board = new int[8][8];
        
        for(int i=0;i<8;i++)
        {
            for(int j=0;j<8;j++)
            {
                board[i][j]=check;
            }
        }
        board[x][y]=0;
        
        if(!path(x,y,1,board))
        {
            return false;
        }
        else
        {
            printBoard(board);
            return true;
        }
    }
    
    private static void printBoard(int[][] board)
    {
        for(int i=0;i<8;i++)
        {
            for(int j=0;j<8;j++)
            {
                System.out.print(String.format("%02d",board[i][j]) + " ");
            }
            System.out.println();
        }
    }
    
    public static boolean path(int i,int j, int step,int[][] board)
    {
        if(step == 8*8)
        {
            return true;
        }
        
        if(isValid(i-2,j+1,board))
        {
            board[i-2][j+1] =step;
            if(path(i-2,j+1,step+1,board))
                return true;
            else
                board[i-2][j+1] =check;
        }
    
        if(isValid(i-1,j+2,board))
        {
            board[i-1][j+2] =step;
            if(path(i-1,j+2,step+1,board))
                return true;
            else
                board[i-1][j+2] =check;
        }
        
        if(isValid(i+1,j+2,board))
        {
            board[i+1][j+2] =step;
            if(path(i+1,j+2,step+1,board))
                return true;
            else
                board[i+1][j+2] =check;
        }

        if(isValid(i+2,j+1,board))
        {
            board[i+2][j+1] =step;
            if(path(i+2,j+1,step+1,board))
                return true;
            else
                board[i+2][j+1] =check;
        }
        
        if(isValid(i+2,j-1,board))
        {
            board[i+2][j-1] =step;
            if(path(i+2,j-1,step+1,board))
                return true;
            else
                board[i+2][j-1] =check;
        }
    
        if(isValid(i+1,j-2,board))
        {
            board[i+1][j-2] =step;
            if(path(i+1,j-2,step+1,board))
                return true;
            else
                board[i+1][j-2] =check;
        }
        
        if(isValid(i-1,j-2,board))
        {
            board[i-1][j-2] =step;
            if(path(i-1,j-2,step+1,board))
                return true;
            else
                board[i-1][j-2] =check;
        }
        
        if(isValid(i-2,j-1,board))
        {
            board[i-2][j-1] =step;
            if(path(i-2,j-1,step+1,board))
                return true;
            else
                board[i-2][j-1] =check;
        }
        return false;
    }   
    
    public static boolean isValid(int x,int y,int[][] board)
    {
        return(x>=0 && y>=0 && x<8 && y<8 && board[x][y] == check);
    }       
}