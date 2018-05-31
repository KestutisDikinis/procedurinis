#include <iostream>	
#include <iomanip>
using namespace std;

int main()
{
	double a, b, proc;
	cin >> a >> b;
	proc = ((b * 100) / a) - 100;
	cout <<fixed << setprecision(2) << proc;
    return 0;
}