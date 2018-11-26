import java.util.Scanner;
public class Kasir {
    public static void main(String[] args) {
         int jlh_data,pilihan,total,bayar,total1,harga = 0;//deklarasi integer

        String namamakanan;
        Scanner input = new Scanner(System.in);
        System.out.println("==================");//mencetak nilai dari objek
        System.out.println("===Menu Makanan===");//mencetak nilai dari objek
        System.out.println("| 1. Mie Ayam     |");//mencetak nilai dari objek
        System.out.println("| 2. Nasi Goreng  |");//mencetak nilai dari objek
        System.out.println("| 3. Mie Goreng   |");//mencetak nilai dari objek
        System.out.println("| 4. Mie Rebus    |");//mencetak nilai dari objek
        System.out.println("==================");//mencetak nilai dari objek
        System.out.print("Silahkan pilih yang anda pesan : ");//mencetak nilai dari objek
        pilihan = input.nextInt();
        if(pilihan == 1){
             harga = 7000;
            System.out.println("@Mie Ayam" + " harga : Rp. " + harga);
        }else if(pilihan == 2){
            harga = 11000;
            System.out.println("@Nasi Goreng " + "harga : Rp. " + harga);
        }else if(pilihan == 3){
            harga = 10000;
            System.out.println("@Mie Goreng " + "harga : Rp. " + harga);
        }else if(pilihan == 4){
            harga = 10000;
            System.out.println("@Mie Rebus " + "harga : Rp. " + harga);
        }else{
            System.out.println("Maaf Pilihan yang Anda Pilih Salah !");
        }
        System.out.print("Jumlah Porsi ? : ");
        jlh_data = input.nextInt();
            total = harga * jlh_data; // melakukan proses perhitungan dari nilai
            System.out.println("Anda harus membayar : Rp. " + total);//mencetak nilai dari objek total
            System.out.print("Bayar : Rp. ");
            bayar = input.nextInt();
            total1 = (int) (bayar - total);
            System.out.println("Kembaliannya : Rp. " +total1);//mencetak nilai dari objek total1

            return;//kembali
         }
    }
