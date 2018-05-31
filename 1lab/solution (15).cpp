#define _USE_MATH_DEFINES
#include <iostream>
#include <cmath>
#include <iomanip>
#include <math.h>

using namespace std;

int main()
{
    double a,b,S;
    cin>>a>>b;
    if(a<b){
        S=M_PI*pow(a/2, 2);
        cout<<fixed<<setprecision(2)<<S<<endl;
    }
    else{
        S=M_PI*pow(b/2, 2);
        cout<<fixed<<setprecision(2)<<S<<endl;
    }
    return 0;
}