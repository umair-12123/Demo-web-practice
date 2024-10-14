import os from 'os';

console.log('Operating System Info:');
console.log('Type:', os.type());
console.log('Platform:', os.platform());
console.log('Architecture:', os.arch());
console.log('Release:', os.release());
console.log('Hostname:', os.hostname());
console.log('CPUs:', os.cpus());
console.log('Free Memory:', os.freemem(), 'bytes');
console.log('Total Memory:', os.totalmem(), 'bytes');
console.log('System Uptime:', os.uptime(), 'seconds');
console.log('Temporary Directory:', os.tmpdir());
console.log('Endianness:', os.endianness());
