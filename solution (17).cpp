#include <iostream>	
#include <iomanip>
#include <cmath>
using namespace std;

int main()
{
	long long a, b, c;
	double x;
	cin >> a >> b >> c;
	x = (b + sqrt(b*b - a*c)) / (2 * a);
	cout << fixed << setprecision(3) << x;
    return 0;
}