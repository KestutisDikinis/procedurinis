#include <iostream>

int main(){
    
long double n, a[101][3], D;
    std::cin >> n;
for (auto i = 0; i < n; i++) {
    for (auto j = 0; j < 3; j++) {
        std::cin >> a[i][j];
    }
}
for (auto i = 0; i < n; i++) {
    D = a[i][1] * a[i][1] - 4 * a[i][0] * a[i][2];
    if (D > 0) {
        if (a[i][0] == 0) {
            if (a[i][2] == 0) {
                    std::cout << "1" << std::endl;
            }
            else {
                    std::cout << "1" << std::endl;
            }
        }
        else if (a[i][2] == 0) {
            if ((a[i][0] > 0 && a[i][1] > 0) || (a[i][0] < 0 && a[i][1] < 0)) {
                    std::cout << "2" << std::endl;
            }
                else if ((a[i][0] > 0 && a[i][1] < 0) || (a[i][0] < 0 && a[i][1] > 0)) {
                    std::cout << "2" << std::endl;
                }
                else {
                    std::cout << "2" << std::endl;
                }
            }
            else {
                std::cout << "2" << std::endl;
            }
        }
        else if (D == 0) {
            if (a[i][0] == 0 && a[i][1] == 0 && a[i][2] == 0) {
                std::cout << "-1" << std::endl;
            }
            else if (a[i][0] == 0 && a[i][1] == 0) {
                std::cout << "0" << std::endl;
            }
            else {std::cout << "1" << std::endl;}
        }
        else std::cout << "0" << std::endl;
    }
    return 0;
}