#include <cmath>

//Snippet to determine if two floats are "close enough" due to C++ == operator inaccuracies
//All credit to Donald Knuth, a famous computer scientist, who suggested the following method in his book 
//“The Art of Computer Programming, Volume II: Seminumerical Algorithms (Addison-Wesley, 1969)”

bool IsEqual(double dX, double dY)
{
    const double dEpsilon = 0.000001; // or some other small number
    return fabs(dX - dY) <= dEpsilon * fabs(dX); //fabs is a cmath function
}
