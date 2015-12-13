import java.util.ArrayList;


public class MainClass {

	// Main methods are what run the program. Once the main method finishes, the program stops
	public static void main(String[] args){
		System.out.println("Start of Program");
		/*
		
		int myInt = 1;
		
		double myDouble = 5.2;
		
		// primitive variable types
		// byte
		// short
		// int
		// long
		// float
		// double
		boolean myBool = false;
		// char
		
		String myString = "My String exists!";
		
		int[] myIntArray = new int[5];
		
		System.out.println(myInt);
		System.out.println("Double Value " + myDouble);
		
		System.out.println(myInt + myDouble);
		
		System.out.println("My int and my double are: " + myInt + myDouble);
		
		System.out.println(myBool);
		System.out.println(myString);
		
		myInt = 5*2-18;
		System.out.println(myInt);
		
		myInt = myInt - 2;
		myInt++;
		myInt -= 7;
		myInt += 3;
		
		System.out.println(myInt);
		
		myString = "Some words are here." + " We also have some numbers - int: " 
						+ myInt + ", double: " + myDouble;

		System.out.println(myString);
		
		
		myIntArray[0] = 2;
		myIntArray[1] = 4;
		myIntArray[2] = 6;
		myIntArray[3] = 8;
		
		System.out.println("" + myIntArray[0] +
				myIntArray[1] +
				myIntArray[2] +
				myIntArray[3] +
				myIntArray[4]
			);
		
		int mySecondInt = 5;
		myInt = 2;
		
		if(mySecondInt < myInt || mySecondInt > 0){
			// true
		} if (mySecondInt < 0) {
			// false
		} else {
			
		}
		
		myBool = mySecondInt > 5;
		
		if(myBool && myInt == 2)
			System.out.println("Both are true");
		else if(myBool || myInt == 2)
			System.out.println("At least one are true");
		else
			System.out.println("Neither are true");
		
		
		// for
		// while
		// for each
		// switch
		// do
		
		for(int loopCondition = 0; loopCondition <= 5; loopCondition++){
			System.out.println(loopCondition);
		}
		
		while(myInt < 50){
			System.out.println(myInt);
			myInt*=5;
		}
		
		for(int myLoopInt : myIntArray){
			System.out.println(myLoopInt);
		}
		
		
		ArrayList<Integer> myArrayList = new ArrayList<Integer>();
		
		myArrayList.add(2);
		myArrayList.add(4);
		myArrayList.add(6);
		myArrayList.add(8);
		
		for(int myLoopInt : myArrayList){
			System.out.println(myLoopInt);
		}
		
		MyThing thisThing = new MyThing("This is it's Name");
		MyThing anotherThing = new MyThing(1, 5.23, "Named");
	
		thisThing.setWeight(8.6);
		thisThing.setID(2);
		System.out.println(thisThing);
		
		//System.out.println(thisThing.getInformation());
		
		
		ArrayList<MyThing> myThings = new ArrayList<MyThing>();
		
		myThings.add(thisThing);
		myThings.add(anotherThing);
		
		System.out.println(myThings.get(0).toString());
		System.out.println(myThings.get(1));
		
		System.out.println("End of Program");
		
		
		Banana myBanana = new Banana();
		System.out.println(myBanana.getInformation());
		
		for(int i = 0; i < 5; i++){
			System.out.println("Banana Age: " + i);
			System.out.println("Ripe: " + myBanana.isRipe());
			System.out.println("Spoiled: " + myBanana.isSpoiled());
			
			myBanana.age();
		}

		System.out.println("Ripe: " + myBanana.isRipe());
		System.out.println("Spoiled: " + myBanana.isSpoiled());
		
		System.out.println(myBanana.getCost(5));
		myBanana.squashBanana();
		
		
		ArrayList<Fruit> myFruitBasket = new ArrayList<Fruit>();
		
		myFruitBasket.add(new Banana());
		myFruitBasket.add(new Orange());
		myFruitBasket.add(myBanana);
		
		for(Fruit myFruit : myFruitBasket){
			System.out.println(myFruit);
		}
		
		Fruit myFruit = myBanana;
		
		*/
		
		Banana banana1 = new Banana();
		Banana banana2 = new Banana();
		Banana banana3 = banana2;
		
		banana1.setCostPerOunce(0.8);
		banana2.setCostPerOunce(0);
		
		// equals method has been overwritten
		System.out.println(banana1.equals(banana2));

		// Something to keep in mind: == always checks if exact same object in memory
		System.out.println(banana1 == banana2);
		System.out.println(banana2 == banana3);
		
		System.out.println(banana2.getInformation());

	}
	
}
