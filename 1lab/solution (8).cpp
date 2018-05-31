#include <iostream>
#include <cmath>
#include <vector>
#define max 1000
using namespace std;

int main() {
    long double A,B,C,D,x;
    vector<long double> ats;
    cin>>A>>B>>C>>D;
    for (x=-1000; x<=max; x++){
        if(A*pow(x,3)+B*pow(x,2)+C*x+D == 0){
            ats.push_back(x);
        }
    }
    if (ats.size()==1){
        cout<<ats[0];
    }
    if (ats.size()==2){
        cout<<ats[0]<<"_"<<ats[1];
    }
    if (ats.size()==3){
        cout<<ats[0]<<"_"<<ats[1]<<"_"<<ats[2];
    }
    return 0;
}