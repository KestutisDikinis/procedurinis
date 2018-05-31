#include <iostream>
#include <math.h>
#include <iomanip>

using namespace std;


int main()
{
    double p, h, r, ats,pi = 3.14159265359;
    cin >> p >> h >> r;
    if (p==1) {
        ats = pi*r*r*h;
        cout<< fixed<<setprecision(2)<< ats << endl;
    }
    else if (p==2) {
        ats = pi *r*r*h / 3;
        cout<<fixed<< setprecision(2) << ats << endl;
    }
    return 0;
}