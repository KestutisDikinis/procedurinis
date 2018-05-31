#include <iostream>
int main() {
    long long n , min , laik;
    bool found = false;
    std::cin >> n;
    for ( auto i = 0 ; i < n ; i++ ){
        std::cin >> laik;
        if ( laik % 2 == 0 ){
            if ( found == true ){
                if ( laik < min ){
                    min = laik;
                }
            }
            else {
                min = laik;
                found = true;
            }
        }
    }
    if ( found == true){
        std::cout << min;
    }
    if ( found == false ){
        std::cout << "No";
    }
    return 0;
}