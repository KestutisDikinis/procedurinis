#include <iostream>
#include <math.h>
#include <iomanip>
using namespace std;

int main()
{
double a,b,x;
cin >> a >> b;
x=(2*sin(a))+((cos(b)-sqrt(tan(b)))*pow(log10(a),5));
cout << setprecision(2)<< x;
}