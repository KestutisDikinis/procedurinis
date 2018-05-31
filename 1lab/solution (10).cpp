#include <iostream>
#define _USE_MATH_DEFINES
#include <math.h>
#include <iomanip>
using namespace std;

int main()
{
    double p, h, r, ats;
    cin >> p >> h >> r;
    if (p==1) {
        ats = M_PI*r*r*h;
        cout << fixed << setprecision(2) << ats << endl;
    }
    else if (p==2) {
        ats = M_PI*r*r*h / 3;
        cout << fixed << setprecision(2) << ats << endl;
    }
    return 0;
}
