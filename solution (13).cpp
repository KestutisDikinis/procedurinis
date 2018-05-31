#include <iostream>
#include <cmath>
#include <iomanip>

using namespace std;
int main() {
    int x1,x2,y1,y2;
    double ilgis;
    cin>>x1>>y1>>x2>>y2;
    ilgis=sqrt(pow((x2-x1), 2)+pow((y2-y1), 2));
    cout<<fixed<<setprecision(2)<<ilgis;
    return 0;
}