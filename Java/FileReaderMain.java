import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

// We show file input/output through the main method below
public class FileReaderMain {

	public static void main(String[] args){
		
		// base file location is considered location of project -- the location below is the same as:
		// String fileName = "C:\\Users\\708420\\workspace\\JavaTrainingProject\\testFile.txt"
		String fileName = "testFile.txt";
		
		// We want to read text files one line at a time
		String thisLine = null;
		try {
			/*
			//Text File
			FileReader fReader = new FileReader(fileName);
		
			BufferedReader bReader = new BufferedReader(fReader);
		
			// read everything
			while((thisLine = bReader.readLine()) != null){
				System.out.println(thisLine);
			}
			
			// We always want to close this - it frees up resources
			bReader.close();
			
			// End of reading text file example until try/catch block
			*/
			
			/*
			//Read any file
			
			// Keep space for us to read information to
			byte[] buffer = new byte[1000];
			
			// Create the stream for reading data
			FileInputStream inStream = new FileInputStream(fileName);
		
			// keep track of data read amounts
			int totalRead = 0;
			int numberRead = 0;
			
			// Loop which does the following:
			// inStream.read(buffer) - puts data into buffer, returns amount of data as a number
			// That returned amount is saved into numberRead, and if it's -1 that means no data was read in
			while((numberRead = inStream.read(buffer)) != -1){
				System.out.println(new String(buffer));
				System.out.println(numberRead);
				totalRead += numberRead;
			}
			
			// Again, close the resource to ensure we free some resources
			inStream.close();
			
			System.out.println("Read " + totalRead + " bytes.");
			*/

			// Writing a text file
			
			// Location to save to
			// You might receive an error if you run this, depending on if you have permission to write to C:\
			// Double \\ used translates to a single \. This is because \ is considered an escape character
			String outputFileName = "My Output File2.txt";

			// What we use to write text files
			FileWriter fWriter = new FileWriter(outputFileName);
			BufferedWriter bWriter = new BufferedWriter(fWriter);
			
			// We create this because the newline character changes in operating systems
			// in linux, we would write just \n
			// in Windows, it's \r\n
			// This saves the correct value into newlineCharacter
			String newlineCharacter = System.getProperty("line.separator");
			
			// Lines we want to write
			bWriter.write("Hey");
			bWriter.write("We're writing this to a file.");
			bWriter.write("This doesn't enter new line characters.");
			bWriter.newLine();
			bWriter.write("New lines can also be put in with the " + newlineCharacter + " \\r\\n character");
			
			// And again, ensure this resource is closed
			bWriter.close();
		} catch (FileNotFoundException e) {
			// We catch if the file wasn't found. If that exception were to occur,
			// the code in the above block would stop immediately and the code here would start 
			e.printStackTrace();
		} catch (IOException e){
			// Here we are catching IOExceptions, and doing nothing. 
			// The code above would stop and we wouldn't react because there's nothing in this section
		} finally {
			// This block happens after the above finish.
			// It will occur if the try succeeds as well as if an exception happens that we catch
			// We might use something like this to clean up resources or output that we have finished
			System.out.println("We have completed all operations in FileReaderMain.");
		}
		
	}
}
