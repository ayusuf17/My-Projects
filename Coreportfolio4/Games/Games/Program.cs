using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
/*
 Purpose: Design and write a modularized menu-driven program that allows the user to select one
of two games (Craps and Pig) to play or to quit the program.  
 
 Input:Rolls,roll combination,total won  bet ,play agin... 
             Huuman score ,reprat and computer score

 Output:        

 Written By:    
 Last Modified: 
 
 */
namespace Games
{
    class Program
    {
        static void Main(string[] args)
        {
            
                //Setup
                int choice;
                bool setGameState = true;

                //variables for crap game
                int rollOne;
                int rollTwo;
                int rollCombination;
                double bet;
                double totalWon = 0.00;
                double totaDeporsite = 0.00;
                string gameState = " ";
                int point = 0;
                char playAgain = 'y';
                char playername;

                //variable for pig game
                int humanTotalScore;

                char repeat = 'y';
                humanTotalScore = 0;
                int computerTotalScore = 0;
            int TotalPoint = 0;


                Random rnd = new Random(); /* allows ranodom number to be generated*/

                do
                {

                    //Display Menu
                    MenuChoice();
                    //Validate menu choice
                    choice = GetValidInt("Enter your menu number choice >");

                    switch (choice)
                    {
                        case 1:


                            Console.WriteLine("------------");
                            Console.WriteLine("|Craps game|");
                            Console.WriteLine("------------");

                            while (playAgain == 'y')
                            {
                                setGameState = true;
                                bet = 0.00;
                                Console.Write("Enter amount to bet:");
                                bet = double.Parse(Console.ReadLine());

                                totaDeporsite += bet;
                                rollOne = rnd.Next(1, 7);
                                rollTwo = rnd.Next(1, 7);
                                rollCombination = rollOne + rollTwo;

                                Console.WriteLine("You rolled{0} +{1}={2}\t", rollOne, rollTwo, rollCombination);
                                while (setGameState == true)
                                {
                                    if (rollCombination == 7 || rollCombination == 12)
                                    {
                                        gameState = "WON";
                                        Console.WriteLine("The dice rolled{0}", rollCombination);
                                        setGameState = false;
                                    }
                                    else if (rollCombination == 2 || rollCombination == 3 || rollCombination == 12)
                                    {
                                        gameState = "LOST";
                                        Console.WriteLine("The dice rolled{0}\t", rollCombination);
                                        setGameState = false;
                                    }
                                    else
                                    {
                                        gameState = "point";
                                        point = rollCombination;
                                        Console.WriteLine("The dice rolled{0}\t", rollCombination);
                                        Console.WriteLine("The point is {0}", point);
                                        setGameState = false;
                                    }
                                }
                                while (gameState == "point")
                                {
                                    setGameState = true;
                                    rollOne = rnd.Next(1, 7);
                                    rollTwo = rnd.Next(1, 7);
                                    rollCombination = rollOne + rollTwo;

                                    Console.WriteLine("You rolled{0} +{1}={2}\t", rollOne, rollTwo, rollCombination);
                                    if (setGameState == true)
                                    {
                                        Console.WriteLine("\n The point  ", point);
                                        Console.WriteLine("rolled is ..{0}", rollCombination);
                                        if (rollCombination == point)
                                        {
                                            gameState = "WON";
                                            setGameState = false;
                                        }
                                        else if (rollCombination == 7)
                                        {
                                            gameState = "LOSS";
                                            setGameState = false;
                                        }
                                        else
                                        {
                                            gameState = "point";
                                        }
                                    }
                                }
                                if (gameState == "WON")
                                {
                                    Console.WriteLine("You won{0:c}", bet);
                                    totalWon += bet;
                                }
                                if (gameState == "LOSS")
                                {
                                    Console.WriteLine("You won{0:c}", bet);
                                    totalWon += bet;
                                }
                                do
                                {
                                    Console.WriteLine("Would you like to play again(y/n)");
                                    try
                                    {
                                        playAgain = char.Parse(Console.ReadLine().ToLower());
                                    }
                                    catch (Exception)
                                    {

                                        Console.WriteLine("Inalid input try again letter...", playAgain);
                                    }
                                    if (playAgain != 'y' && playAgain != 'n')
                                    {
                                        Console.WriteLine("{0}Is an inalid input.... Try again letter.", playAgain);
                                    }
                                } while (playAgain != 'y' && playAgain != 'n');
                                if (playAgain == 'n')
                                {
                                    Console.WriteLine("Your net winning is {0:c}", totalWon);
                                }
                            }


                            break;
                        case 2:

                            Console.WriteLine("------------");
                            Console.WriteLine("|Pig game  |");
                            Console.WriteLine("------------");
                            while (repeat != 'y' && repeat != 'Y')
                            {
                                do
                                {

                                    humanTotalScore = int.Parse(Console.ReadLine());


                                    computerTotalScore = int.Parse(Console.ReadLine());

                                    playername = ' ';

                                    if (humanTotalScore >= TotalPoint && computerTotalScore <=TotalPoint)

                                    {

                                        Console.WriteLine("you win!");

                                    }



                                    if (humanTotalScore < TotalPoint && computerTotalScore >= TotalPoint)
                                    {


                                        Console.WriteLine("Sorry " + playername + ", you lost.");

                                    }



                                } while (repeat != 'y');
                            }

                            break;
                        default:
                            break;
                    }




                } while (choice != 0);
                Console.ReadLine(); // keeps debugger open
            }//eom
            static void MenuChoice()
            {

                Console.WriteLine("|------------------|");
                Console.WriteLine("|CPSC1012 Casino   |");
                Console.WriteLine("|------------------|");
                Console.WriteLine("|1.Play Craps      |");
                Console.WriteLine("|2.Play Pigs       |");
                Console.WriteLine("|0.Exit programme  |");
                Console.WriteLine("|------------------|");
                Console.WriteLine("\n");
            }//eom
            static int GetValidInt(string prompt)
            {
                int choice;
                do
                {
                    Console.Write(prompt);
                    try
                    {
                        choice = int.Parse(Console.ReadLine());
                        if (choice != 0 && choice != 1 && choice != 2)
                        {
                            Console.WriteLine("Please  select a valid menu option...");
                        }
                    }
                    catch (Exception)
                    {

                        Console.WriteLine("Please  select a valid menu option....");
                        choice = 0;
                    }
                } while (choice != 0 && choice != 1 && choice != 2);
                return choice;
            }//eom
            static void humanTurn()
            {
                do
                {
                    int TotalPoint;
                    Console.WriteLine("Enter the total point toplay:");
                    TotalPoint = int.Parse(Console.ReadLine());

                } while (true);
            }//eom
        }//eoc
    }//eon

