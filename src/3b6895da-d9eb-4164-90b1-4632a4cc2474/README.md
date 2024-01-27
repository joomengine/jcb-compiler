```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Customview**
```uml
@startuml
class Data  #Gold {
  # array $data
  # Config $config
  # EventInterface $event
  # Customcode $customcode
  # Gui $gui
  # Libraries $libraries
  # Templatelayout $templateLayout
  # Dynamicget $dynamic
  # Loader $loader
  # Javascriptcustomview $javascript
  # Csscustomview $css
  # Phpcustomview $php
  # Custombuttons $custombuttons
  # Ajaxcustomview $ajax
  # $db
  + __construct(?Config $config = null, ?EventInterface $event = null, ...)
  + get(int $id, string $table = 'site_view') : ?object
}

note right of Data::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?EventInterface $event = null
    ?Customcode $customcode = null
    ?Gui $gui = null
    ?Libraries $libraries = null
    ?Templatelayout $templateLayout = null
    ?Dynamicget $dynamic = null
    ?Loader $loader = null
    ?Javascriptcustomview $javascript = null
    ?Csscustomview $css = null
    ?Phpcustomview $php = null
    ?Ajaxcustomview $ajax = null
    ?Custombuttons $custombuttons = null
end note

note right of Data::get
  Get all Custom View Data

  since: 3.2.0
  return: ?object
end note
 
@enduml
```

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

