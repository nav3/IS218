import java.util.*;

public class MainCollections {

	public static void main(String[] args){
		
		// Once we override the equals and compareTo methods,
		// These collections do a lot for us. Ordering, arranging, sorting, storing, etc
			// List
				//  General collection usage - zero based index
				//  Access based on index
				// Main Types Seen:
				// ArrayList
				// LinkedList
				// Vector
				
						
		/*
		// Linked List Example
		LinkedList<String> myList = new LinkedList<String>();
	
		myList.add("one");
		myList.add("1");
		myList.add("Hello");
		
		System.out.println(myList);
		
		System.out.println(myList.get(0));
		
		myList.addFirst("First");
		myList.addLast("Last");
		
		myList.set(3, "Hi.");
		myList.remove(1);
		System.out.println(myList);
		
		*/
		/*
		// Set
		//  Collection which can not contain any duplicate objects
			// HashSet - stores elements in a hash table - considered best performance but no guarantee on order of iteration
			// LinkedHashSet - Hash table with linked list through it. Ordered based on insertion
			// TreeSet - stores elements based on values in red-black tree. Slower than hash set
		
		// TreeSet Example
		TreeSet<Integer> treeSet = new TreeSet<Integer>();
		
		treeSet.add(1);
		treeSet.add(5);
		treeSet.add(182);
		treeSet.add(0);
		treeSet.add(0);
		treeSet.add(0);
		treeSet.add(3);
		treeSet.add(26);
		
		System.out.println(treeSet);
		
		*/
		
		// Map
			//  Collection that pairs keys to values
			//  Cannot have duplicate keys
				// HashMap
				// TreeMap
				// LinkedHashMap
		// HashMap Example
		HashMap<Integer, String> hmap = new HashMap<Integer, String>();
		
		hmap.put(1, "A Name");
		hmap.put(6, "B Name");
		hmap.put(3, "D Name");
		hmap.put(62, "C Name");
		hmap.put(5, "5");
		
		System.out.println(hmap);
		
		// Iterator -- forwards
		// ListIterator - forwards and backwards
		
		Set set = hmap.entrySet();
		Iterator iter = set.iterator();
		
		while(iter.hasNext()){
			Map.Entry mapObject = (Map.Entry)iter.next();
			
			System.out.println("Our key is: " + mapObject.getKey() +
					" and our Value is: " + mapObject.getValue());
		
		}
		
		System.out.println("We are going to remove the value " + hmap.get(6));
		
		System.out.println(hmap.remove(6));
		System.out.println(hmap);
	}
	
}
