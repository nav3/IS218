
// Example of minimum needed to extend from Fruit class
// Functionally correct, but doesn't do much
public class Orange extends Fruit {

	public Orange(){
		this.productCode = "ORAN1";
	}
	@Override
	public boolean isRipe() {
		// TODO Auto-generated method stub
		return false;
	}

	@Override
	public boolean isSpoiled() {
		// TODO Auto-generated method stub
		return false;
	}

	@Override
	public void age() {
		// TODO Auto-generated method stub
		
	}

}
