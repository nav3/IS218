
public abstract class Fruit implements Sellable {

	// Information that all children will have by extending Fruit
	double ounces;
	double costPerOunce;
	String productCode = "ABCD1234";
	ObjectColor fruitColor;
	
	// Override methods from Sellable
	// Because we're in an abstract class, it's possible to not implement them here,
	//  but the children of this class if not abstract would have to implement them
	@Override
	public void setProductCode(String code){
		productCode = code;
	}
	@Override
	public String getProductCode(){
		return productCode;
	}
	@Override
	public double getCost() throws costException{
		double cost = ounces*costPerOunce;
		if(cost > 0){
			return cost;
		} else {
			throw new costException();
		}
	}
	
	@Override
	public double getCost(int quantity) throws costException{
		double cost = ounces * costPerOunce * quantity;
		if(cost > 0)
			return cost;
		else
			throw new costException();
	}
	
	// Create abstract methods that we want children to impelment
	// We don't know how each fruit might ripen, age or spoil, so we don't give details here
	public abstract boolean isRipe();
	public abstract boolean isSpoiled();
	public abstract void age();
	
	// Overriding the methods below
	// These are system methods which initially just compare if it's the same object in memory
	// We can make different rules to output information or check for equality in a different way
	@Override
	public String toString(){
		return "Fruit exists with produce code: " + productCode;
	}
	
	// How do decide if one is less than/greater than/equal to another
	@Override
	public int compareTo(Sellable p){
		return (this.productCode.compareTo(p.getProductCode()));
	}
	
	// sort similar items to the same place for better storage and searching
	// Do this if overriding equals method
	@Override
	public int hashCode(){
		int result;
		
		if(this.productCode == null)
			result = 0;
		else
			result = (productCode.substring(0, 3)).hashCode();
		
		return result;
	}
	
	// Decide if one is equal to another. Ensure it is consistent with compareTo
	@Override
	public boolean equals(Object p){
		// Check if it's the same object in memory
		if(this == p)
			return true;
		// check if we're passing in a null object
		// This helps to avoid NullPointerException
		if(p == null)
			return false;
		// Ensure that we have the same class, so when we do (Fruit) p below it doesn't fail
		if(getClass() != p.getClass())
			return false;
		
		// We know it's a fruit now, so we can treat it as such
		Fruit object = (Fruit) p;
		
		// Whatever logic we want to check on for if we consider it equal
		if(productCode.equalsIgnoreCase(object.productCode))
			return true;
		else
			return false;
		
	}
}
