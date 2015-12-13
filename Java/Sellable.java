
// Creating an exception we want to use here
// We could also create this in its own file
class costException extends Exception{
	
}

//Interface creation
// We create methods which are mandatory for things which have the Sellable attribute (implement Sellable)
public interface Sellable extends Comparable<Sellable>{
	
	

	public void setProductCode(String code);
	public String getProductCode();
	public double getCost() throws costException;
	public double getCost(int quantity) throws costException;
	
	public int compareTo(Sellable p);
	public boolean equals(Object p);
	public int hashCode();
}
