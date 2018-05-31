#include <iostream>
#include <string>
int main() {
    std::string eiles[101][101] ;
    int n , temp , inc = 0;
    std::cin >> n ;
    temp = n / 2;
    for ( int j = 1 ; j < temp + 1 ; j++ ){
        for ( int o = 0 ; o < n ; o++ ){
            eiles[j][o] = "-";
            eiles[j][temp - inc] = "O";
            eiles[j][temp + inc] = "O";
            std::cout << eiles[j][o];
        }
        inc++;
        std::cout << std::endl;
    }
    inc = temp;
    for( auto j = temp ; j < n ; j++ ){
        for( auto i = 0 ; i < n ; i++ ){
            eiles[j][i] = "-";
            eiles[j][temp - inc] = "O";
            eiles[j][temp + inc] = "O";
            std::cout << eiles[j][i];
        }
        inc--;
        std::cout << std::endl;
        }
    return 0 ;
}