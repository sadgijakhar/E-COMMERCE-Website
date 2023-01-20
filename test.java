class Rectangle{
    float length ;
    float breadth ;
    Rectangle(){
        this.length = 1;
        this.breadth = 1;
    }

    float perimeter(){
        float perimeter = 2*( length + breadth );
        return perimeter;
    }

    float area(){
        float area = length*breadth;
        return area;
    }
    public void setlength(float length1){
        if(length1 < 20.0 && length1 >0.0){
            length = length1;
        }
    }
    public void setbreadth(float breadth1)
    {
        if(breadth1 < 20.0 && breadth1 >0.0){
            breadth = breadth1;
        }
    }
 
    public float getlength() {
        return length; 
    }
    public float getbreadth() {
        return breadth; 
    }
    public static void main(String[] args) {
        Rectangle r1= new Rectangle();
        System.out.println(r1.getbreadth());    
    }
}
