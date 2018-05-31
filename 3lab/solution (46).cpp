#include <iostream>
#include <iomanip>
#include <fstream>
#include <climits>

long long Fibon(long long n){
    if(n==0){
        return 0;
    }else if (n==1||n==2){
        return 1;
    }else{
        return Fibon(n-2)+Fibon(n-1);
    }
}

int main(){
    long long n;
    std::fstream ivedimas;
    ivedimas.open("11.in");
    ivedimas>>n;
    std::ofstream isvedimas;
    isvedimas.open("11.out");
    isvedimas << Fibon(n);
    isvedimas.close();
    ivedimas.close();
    return 0;
}