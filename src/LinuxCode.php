<?php
// +----------------------------------------------------------------------
// | program: phpc
// +----------------------------------------------------------------------
// | Copyright (c) 2019
// +----------------------------------------------------------------------
// | Licensed MIT
// +----------------------------------------------------------------------
// | Author: zhangjs
// +----------------------------------------------------------------------
// | Date: 2019/3/25 0022
// +----------------------------------------------------------------------
// | Time: 下午 22:01
// +----------------------------------------------------------------------
namespace phpth\ipc;

class LinuxCode
{
    /**
     *
     * @var array
     */
    public static $code = [
        1   => 'Operation not permitted	操作不允许' ,
        2   => 'No such file or directory	文件/路径不存在' ,
        3   => 'No such process	进程不存在' ,
        4   => 'Interrupted system call	中断的系统调用' ,
        5   => 'Input/output error	I/O错误' ,
        6   => 'No such device or address	设备/地址不存在' ,
        7   => 'Argument list too long	参数列表过长' ,
        8   => 'Exec format error	执行格式错误' ,
        9   => 'Bad file descriptor	错误文件编号' ,
        10  => 'No child processes	子进程不存在' ,
        11  => 'Try again 	重试' ,
        12  => 'Out of memory	内存不足' ,
        13  => 'Permission denied	无权限' ,
        14  => 'Bad address	地址错误' ,
        15  => 'Block device required	需要块设备' ,
        16  => 'Device or resource busy	设备或资源忙' ,
        17  => 'File exists	文件已存在' ,
        18  => 'Invalid Cross-device link	跨设备链路' ,
        19  => 'No such device	设备不存在' ,
        20  => 'Not a directory	目录不存在' ,
        21  => 'Is a directory	是目录' ,
        22  => 'Invalid argument	无效参数' ,
        23  => 'File table overflow	无效参数' ,
        24  => 'Too many open files	打开的文件过多' ,
        25  => 'Not a tty device	非tty设备' ,
        26  => 'Text file busy	文本文件忙' ,
        27  => 'File too large	文件太大' ,
        28  => 'No space left on device	设备无空间' ,
        29  => 'Illegal seek	非法查询' ,
        30  => 'Read-only file system	只读文件系统' ,
        31  => 'Too many links	链接太多' ,
        32  => 'Broken pipe	管道破裂' ,
        33  => 'Math argument out of domain of func 	参数超出函数域' ,
        34  => 'Math result not representable	结果无法表示' ,
        35  => 'Resource deadlock would occur	资源将发生死锁' ,
        36  => 'Filename too long	文件名太长' ,
        37  => 'No record locks available	没有可用的记录锁' ,
        38  => 'Function not implemented	函数未实现' ,
        39  => 'Directory not empty	目录非空' ,
        40  => 'Too many symbolic links encountered	遇到太多符号链接' ,
        41  => 'Same as EAGAIN	操作会阻塞' ,
        42  => 'No message of desired type	没有符合需求类型的消息' ,
        43  => 'Identifier removed	标识符已删除' ,
        44  => 'Channel number out of range	通道编号超出范围' ,
        45  => 'Level 2 not synchronized	level2不同步' ,
        46  => 'Level 3 halted	3级停止' ,
        47  => 'Level 3 reset	3级重置' ,
        48  => 'Link number out of range	链接编号超出范围' ,
        49  => 'Protocol driver not attached	协议驱动程序没有连接' ,
        50  => 'No CSI structure available	没有可用的CSI结构' ,
        51  => 'Level 2 halted	2级停止' ,
        52  => 'Invalid exchange	无效交换' ,
        53  => 'Invalid request descriptor	无效请求描述' ,
        54  => 'Exchange full	交换完全' ,
        55  => 'No anode	无元素节点' ,
        56  => 'Invalid request code	无效请求码' ,
        57  => 'Invalid slot	无效插槽' ,
        58  => 'Same as EDEADLK' ,
        59  => 'Bad font file format	错误的字体文件格式' ,
        60  => 'Device not a stream	不是流设备' ,
        61  => 'No data available	无数据' ,
        62  => 'Timer expired	计时器到期' ,
        63  => 'Out of streams resources	流资源不足' ,
        64  => 'Machine is not on the network	机器不在网络上' ,
        65  => 'Package not installed	包未安装' ,
        66  => 'Object is remote	是远程对象' ,
        67  => 'Link has been severed	链接正在服务中' ,
        68  => 'Advertise error	广告错误' ,
        69  => 'Srmount error' ,
        70  => 'Communication error on send	发送过程中通讯错误' ,
        71  => 'Protocol error	协议错误' ,
        72  => 'Multihop attempted	多跳尝试' ,
        73  => 'RFS specific error	RFS特定错误' ,
        74  => 'Not a data message	不是数据类型消息' ,
        75  => 'Value too large for defined data type	对指定的数据类型来说值太大' ,
        76  => 'Name not unique on network	网络上名字不唯一' ,
        77  => 'File descriptor in bad state	文件描述符状态错误' ,
        78  => 'Remote address changed	远程地址改变' ,
        79  => 'Cannot access a needed shared library	无法访问需要的共享库' ,
        80  => 'Accessing a corrupted shared library	访问损坏的共享库' ,
        81  => 'A .lib section in an .out is corrupted	库部分在an.out损坏' ,
        82  => 'Linking in too many shared libraries	试图链接太多的共享库' ,
        83  => 'Cannot exec a shared library directly	不能直接运行共享库' ,
        84  => 'Illegal byte sequence	非法字节序' ,
        85  => 'Interrupted system call should be restarted	应重新启动被中断的系统调用' ,
        86  => 'Streams pipe error	流管错误' ,
        87  => 'Too many users	用户太多' ,
        88  => 'Socket operation on non-socket	在非套接字上进行套接字操作' ,
        89  => 'Destination address required	需要目的地址' ,
        90  => 'Message too long	消息太长' ,
        91  => 'Protocol wrong type for socket	错误协议类型' ,
        92  => 'Protocol not available	协议不可用' ,
        93  => 'Protocol not supported	不支持协议' ,
        94  => 'Socket type not supported	不支持套接字类型' ,
        95  => 'Operation not supported on transport endpoint	操作上不支持传输端点' ,
        96  => 'Protocol family not supported	不支持协议族' ,
        97  => 'Address family not supported by protocol	协议不支持地址群' ,
        98  => 'Address already in use	地址已被使用' ,
        99  => 'Cannot assign requested address	无法分配请求的地址' ,
        100 => 'Network is down	网络已关闭' ,
        101 => 'Network is unreachable	网络不可达' ,
        102 => 'Network dropped connection because of reset	网络由于复位断开连接' ,
        103 => 'Software caused connection	软件导致连接终止' ,
        104 => 'Connection reset by peer	连接被对方复位' ,
        105 => 'No buffer space available	没有可用的缓存空间' ,
        106 => 'Transport endpoint is already connected	传输端点已连接' ,
        107 => 'Transport endpoint is not connected	传输端点未连接' ,
        108 => 'Cannot send after transport endpoint shutdown 	传输端点关闭后不能在发送' ,
        109 => 'Too many references	太多的引用' ,
        110 => 'Connection timed	连接超时' ,
        111 => 'Connection refused	连接被拒绝' ,
        112 => 'Host is down	主机已关闭' ,
        113 => 'No route to host	无法路由到主机' ,
        114 => 'Operation already	操作已在进程中' ,
        115 => 'Operation now in	进程中正在进行的操作' ,
        116 => 'Stale NFS file handle	过时的NFS文件句柄' ,
        117 => 'Structure needs cleaning	结构需要清除' ,
        118 => 'Not a XENIX-named	不是XENIX 命名' ,
        119 => 'No XENIX semaphores	没有XENIX信号量' ,
        120 => 'Is a named type file	是命名类型文件' ,
        121 => 'Remote I/O error	远程I/O错误' ,
        122 => 'Quota exceeded	超出配额' ,
        123 => 'No medium found	未发现介质' ,
        124 => 'Wrong medium type	错误介质类型' ,
        125 => 'Operation canceled	取消操作' ,
        126 => 'Required key not available	所需密钥不可用' ,
        127 => 'Key has expired	密钥已过期' ,
        128 => 'Key has been revoked	密钥已被吊销' ,
        129 => 'Key was rejected by service	密钥被服务拒绝' ,
        130 => 'Owner died	所有者被删除' ,
        131 => 'State not recoverable	不可恢复状态' ,
    ];

    /**
     * 根据错误码获取错误信息
     * @param int $code
     * @return string
     */
    public static function getMsgByCode(int $code):string
    {
        return LinuxCode::$code[$code]??'未知错误！';
    }
}