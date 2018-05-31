#include <iostream>
#include <cmath>
#include <iomanip>
using namespace std;
int main() {
    int x;
    double ats;
    cin>>x;
    ats = (5 * pow(x, 3) + pow(sin(exp(3 * x) - 16 * (x*x)), 2)) / (sin(4 * x) / (cos(4 * x) + 1) + 1);
    cout << fixed << setprecision(2) << ats;
    return 0;
}