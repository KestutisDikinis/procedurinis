#include <fstream>
long long Fib(int n) {
    long long array[81];
    array[0] = 0;
    array[1] = 1;
    for (int i = 2; i <= n; i++){
        array[i] = array[i - 1] + array[i - 2];
    }
    return array[n];
}
int main()
{
    int n;
    std::ifstream in("14.in");
    in >> n;
    in.close();
    std::ofstream out("14.txt");
    out << Fib(n);
    out.close();
    return 0;
}