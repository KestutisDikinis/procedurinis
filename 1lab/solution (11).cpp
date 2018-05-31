#include <iostream>
#include <cmath>
using namespace std;
//Duoti kvadratinės lygties koeficientai a,b,c. Raskite lygties sprendinius.
int main() {
    double a,b,c,diskriminantas,x1,x2;
    cin>>a>>b>>c;
    diskriminantas = sqrt((b*b)-(4*a*c));
    if(diskriminantas>0){
        x1=(-b-diskriminantas)/(2*a);
        x2=(-b+diskriminantas)/(2*a);
        if (x1>=x2){
            cout<<x2<<"_"<<x1;
        }else{
            cout<<x1<<"_"<<x2;
        }
    }else if (diskriminantas==0){
        x1=-b/(2*a);
        cout <<x1;
    }else {
        cout << "NO";
    }
}
