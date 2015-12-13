import java.awt.Color;


public class Banana extends Fruit{

	int firmness = 10;
	
	public Banana(){
		productCode="BANA1";
		fruitColor = ObjectColor.Green;
		ounces = 6;
		costPerOunce = 0.18;
	}
	
	// Method to set a value - considered a 'setter'
	// We usually do this for all variables in the class we want it possible to be modified
	// This is so everyone has a regular place to interact with it, 
	//  and if we change the logic or limit it in the future, we can change it here and don't need their code changed
	// No return value (void) - we just set the value and move on.
	public void setCostPerOunce(double costPerOunce){
		this.costPerOunce = costPerOunce;
	}
	
	// Method to get information about a banana
	// Returns a String, takes in no values
	// Try/Catch blocks added because getCost() throws an exception
	public String getInformation(){
		try {
			return("Banana weights " + ounces + " ounces. The total price is: " + getCost());
		} catch (costException e) {
			return("Invalid banana identified - Cost must be greater than 0.");
		}
	}

	// Return true/false based on color
	@Override
	public boolean isRipe() {
		switch(fruitColor){
		case Green:
			return false;
		default:
			return true;
		}
	}
	
	// return true/false based on color and firmness
	@Override
	public boolean isSpoiled() {
		switch(fruitColor){
		case Brown:
			return true;
		case Spotted:
			if(firmness < 6)
				return true;
			else
				return false;
		default:
			return false;
		}
	}

	// Method with no return, does an action
	public void squashBanana(){
		firmness -= 3;
	}
	
	// Method to make changes if banana considered to 'age'
	@Override
	public void age() {
		switch(fruitColor){
		case Green:
			fruitColor = ObjectColor.Yellow;
			break;
		case Yellow:
			fruitColor = ObjectColor.Spotted;
			break;
		default:
			fruitColor = ObjectColor.Brown;
			break;
		}
		firmness -= 2;
	}
	
	// toString method is a method which changes how objects are output
	// Create this whenever you want a text representation of an object
	// Once this is made, a print statement for the object regularly or with .toString() return this
	//	System.out.println(myBanana) is the same as System.out.println(myBanana.toString())
	@Override
	public String toString(){
		return "A Banana exists with produce code: " + productCode;
	}



}
