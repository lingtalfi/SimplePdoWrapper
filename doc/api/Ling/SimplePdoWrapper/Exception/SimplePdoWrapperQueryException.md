[Back to the Ling/SimplePdoWrapper api](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper.md)



The SimplePdoWrapperQueryException class
================
2019-07-22 --> 2020-06-02






Introduction
============

The SimplePdoWrapperQueryException class.



Class synopsis
==============


class <span class="pl-k">SimplePdoWrapperQueryException</span> extends [SimplePdoWrapperException](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/Exception/SimplePdoWrapperException.md) implements [\Throwable](http://php.net/manual/en/class.throwable.php) {

- Properties
    - protected string [$query](#property-query) ;

- Inherited properties
    - protected  [Exception::$message](#property-message) =  ;
    - protected  [Exception::$code](#property-code) = 0 ;
    - protected  [Exception::$file](#property-file) ;
    - protected  [Exception::$line](#property-line) ;

- Methods
    - public [__construct](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/Exception/SimplePdoWrapperQueryException/__construct.md)(?$message = , ?$code = 0, ?[\Throwable](http://php.net/manual/en/class.throwable.php) $previous = null) : void
    - public [getQuery](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/Exception/SimplePdoWrapperQueryException/getQuery.md)() : string
    - public [setQuery](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/Exception/SimplePdoWrapperQueryException/setQuery.md)(string $query) : void
    - public [setMessage](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/Exception/SimplePdoWrapperQueryException/setMessage.md)(string $message) : void

}




Properties
=============

- <span id="property-query"><b>query</b></span>

    This property holds the query for this instance.
    
    

- <span id="property-message"><b>message</b></span>

    
    
    

- <span id="property-code"><b>code</b></span>

    
    
    

- <span id="property-file"><b>file</b></span>

    
    
    

- <span id="property-line"><b>line</b></span>

    
    
    



Methods
==============

- [SimplePdoWrapperQueryException::__construct](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/Exception/SimplePdoWrapperQueryException/__construct.md) &ndash; Builds the SimplePdoWrapperQueryException instance.
- [SimplePdoWrapperQueryException::getQuery](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/Exception/SimplePdoWrapperQueryException/getQuery.md) &ndash; Returns the query of this instance.
- [SimplePdoWrapperQueryException::setQuery](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/Exception/SimplePdoWrapperQueryException/setQuery.md) &ndash; Sets the query.
- [SimplePdoWrapperQueryException::setMessage](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/Exception/SimplePdoWrapperQueryException/setMessage.md) &ndash; Sets the message for this exception.





Location
=============
Ling\SimplePdoWrapper\Exception\SimplePdoWrapperQueryException<br>
See the source code of [Ling\SimplePdoWrapper\Exception\SimplePdoWrapperQueryException](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/Exception/SimplePdoWrapperQueryException.php)



SeeAlso
==============
Previous class: [SimplePdoWrapperException](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/Exception/SimplePdoWrapperException.md)<br>Next class: [SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/SimplePdoWrapper.md)<br>
