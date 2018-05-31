#include <iostream>
#include <cmath>
using namespace std;

int main() {
    double a,b,c,disk,x1,x2;
    cin>>a>>b>>c;
    disk=sqrt((b*b)-(4*a*c));
    if(disk>0){
        x1=(-b-disk)/(2*a);
        x2=(-b+disk)/(2*a);
        if (x1>=x2){
            cout<<x2<<"_"<<x1;
        }
        else{
            cout<<x1<<"_"<<x2;
        }
    }
    else if (disk==0){
        x1=-b/(2*a);
        cout <<x1;
    }
    else {
        cout << "NO";
    }
}