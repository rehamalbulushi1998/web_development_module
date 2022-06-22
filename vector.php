
<script>
   class Vector{
    constructor(x, y){
        this.x = x;
        this.y = y;
    }

    addition(v){
        return new Vector(this.x+v.x, this.y+v.y);
    }

    subtraction(v){
      
        return new Vector(this.x-v.x, this.y-v.y);
       
    }


    multiplay(n){
     
        return new Vector(this.x*n, this.y*n);   
    }

    static length(val1, val2){
       
       var length = Math.sqrt(this.x*this.x+this.y*this.y);

       return length;
    }

    magnitude(){
        return Math.sqrt(this.x**2 + this.y**2);
    }

    unitVector(){
        
            return new Vector(this.x/this.magnitude(), this.y/this.magnitude());
    }
      
   getAngle(){
      var vectorAngle = Math.atan2(this.y, this.x);
      var degrees = 180 * vectorAngle / Math.PI;
      return (360 + Math.round(degrees)) % 360;
    } 
    
}
 

    </script>
