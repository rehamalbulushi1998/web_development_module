
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
        length = val1.x*val2.x + val1.y*val2.y;

       return new Vector(this.x/length, this.y/length);
    }

    magnitude(){
        return Math.sqrt(this.x**2 + this.y**2);
    }

    unitVector(){
        
            return new Vector(this.x/this.magnitude(), this.y/this.magnitude());
        }

    }

    this.getAngle = function(){
    var vectorAngle = Math.atan2(this.y, this.x);
    var degrees = 180 * vectorAngle / Math.PI;
    return (360 + Math.round(degrees)) % 360;
}
 

    </script>
