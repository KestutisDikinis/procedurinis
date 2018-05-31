#include <iostream>
int main() {

    long long a[10][10] , n;
    std::cin >> n;
    for ( auto i = 0 ; i < n ; i++ ){
        for ( auto j = 0 ; j < n ; j++ ){
            std::cin >> a[i][j];
        }
    }
    for ( int i = 0; i < n; i++ ) {
        for ( int j = i + 1; j < n; j++ ) {
  long long temp = a[i][j];
            a[i][j] = a[j][i];
            a[j][i] = temp;
        }
    }
    for ( int i = 0; i < n; i++ ) {
        for ( int j = 0; j < n/2; j++ ) {
  long long temp = a[i][j];
            a[i][j] = a[i][n-1-j];
            a[i][n-1-j] = temp;
        }
    }
    for ( int i = 0; i < n; i++ ) {
        for ( int j = 0; j < n; j++ ) {
            std::cout << a[i][j];
            if (j < n-1){
                std::cout<< " ";
            }
        }
        std::cout << std::endl;
    }
    return 0;
}