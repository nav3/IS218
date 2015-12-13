
public class MyThing {

	private int id;
	protected double weight;
	String name;
	ObjectColor myColor = ObjectColor.Green;
	
	public boolean isActive = true;
	
	// Constructors - example of overloading with Constructors
	public MyThing(){
		id = 0;
		weight = 0;
		name = "";
	}
	public MyThing(String aString){
		if(aString == "1"){
			id = 1;
			name = "";
		} else{
			id = 0;
			name = aString;
		}
		weight = 0;
	}
	public MyThing(int _id, double aWeight, String thisName){
		id = _id;
		weight = aWeight;
		name = thisName;
	}
	
	
	// getter and setter methods
	public int getID(){
		if(id > 0)
			return id;
		else
			return 0;
	}
	public void setID(int _id){
		id = _id;
	}
	public double getWeight(){
		return weight;
	}
	public void setWeight(double weight){
		this.weight = weight;
	}
	public String getName(){
		return name;
	}
	
	// other Methods
	public String getInformation(){
		return "This object, " + getName() + " has ID " + getID();
	}
	
	@Override
	public String toString(){
		return "This object, " + getName() + " has ID " + getID() + ".";
	}
}
