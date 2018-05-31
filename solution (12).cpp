#include <iostream>
#include <cmath>
#include <iomanip>
using namespace std;

int main() {
    int x1,y1,x2,y2,x3,y3;
    double ilgis1,ilgis2,ilgis3,pusp,S;
    cin>>x1>>y1>>x2>>y2>>x3>>y3;
    ilgis1=sqrt(pow((x2-x1), 2)+pow((y2-y1), 2));
    ilgis2=sqrt(pow((x3-x2), 2)+pow((y3-y2), 2));
    ilgis3=sqrt(pow((x1-x3), 2)+pow((y1-y3), 2));
    pusp=(ilgis1+ilgis2+ilgis3)/2;
    S=sqrt(pusp*(pusp-ilgis1)*(pusp-ilgis2)*(pusp-ilgis3));
    cout<<fixed<<setprecision(1)<<S<<endl;
    return 0;
}