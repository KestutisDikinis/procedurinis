#include <iostream>
#include <cmath>
#include <iomanip>

void Apsk(long double x1, long double y1, long double x2, long double y2, long double x3, long double y3, long double x4, long double y4)
{
    long double ilgis1,ilgis2,ilgis3,ilgis4,s,p;
    
    ilgis1 = sqrt(pow(x2,2)-(2*x2*x1)+pow(x1,2)+pow(y2,2)-(2*y2*y1)+pow(y1,2));
    ilgis2 = sqrt(pow(x3,2)-(2*x3*x2)+pow(x2,2)+pow(y3,2)-(2*y3*y2)+pow(y2,2));
    ilgis3 = sqrt(pow(x4,2)-(2*x4*x3)+pow(x3,2)+pow(y4,2)-(2*y4*y3)+pow(y3,2));
    ilgis4 = sqrt(pow(x1,2)-(2*x1*x4)+pow(x4,2)+pow(y1,2)-(2*y1*y4)+pow(y4,2));
    
    s = ilgis1*ilgis2;
    p =ilgis1+ilgis2+ilgis3+ilgis4;
    std::cout << std::fixed<<std::setprecision(5) << s << std::endl << p;
    
}


int main ()
{
    long double x1,y1,x2,y2,x3,y3,x4,y4;
    std::cin >>x1>>y1>>x2>>y2>>x3>>y3>>x4>>y4;
    Apsk(x1,y1,x2,y2,x3,y3,x4,y4);
    
    return 0 ;
}
