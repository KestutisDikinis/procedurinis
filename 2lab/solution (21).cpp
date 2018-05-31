#include <iostream>
int main() {
    long long laik, Max,n , vieta = 0;
    bool aryra = false;
    std::cin >> n;
    for ( auto i = 0 ; i < n ; i++ ){
        std::cin >> laik;
        if ( laik < 0 ){
            if( aryra == true ){
                if( laik > Max){
                    Max = laik;
                    vieta = i+1;
                }
            }else{
                aryra = true;
                Max = laik;
                vieta = i+1;
            }
        }
    }
    if( aryra == true ){
        std::cout << vieta;
    }else {
        std::cout << "NERA";
    }
    return 0;
}