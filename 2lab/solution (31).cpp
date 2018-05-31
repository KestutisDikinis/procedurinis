#include <iostream>
int main() {
    long long masyvIlgis , count = 0 , a[10] = {};
    std::cin >> masyvIlgis;
    for ( auto i = 0 ; i < masyvIlgis ; i++){
        std::cin >> a[i];
    }
    for ( auto i = 0 ; i < masyvIlgis ; i++ ){
        for ( auto j = i + 1 ; j < masyvIlgis ; j++ ){
            if ( a[i] == a[j] )
                count++;
        }
    }
    if ( count == 0 ){
        std::cout << "TAIP";
    }
    else {
        std::cout << "NE";
    }
    return 0 ;
}