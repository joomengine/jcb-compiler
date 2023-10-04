```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Selection (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Dynamicget**
```uml
@startuml
class Selection  #Gold {
  # array $name
  # Config $config
  # GetAsLookup $getaslookup
  # SiteFields $sitefields
  # \JDatabaseDriver $db
  + __construct(Config $config, GetAsLookup $getaslookup, ...)
  + get(string $methodKey, string $viewCode, ...) : ?array
  # name(int $id) : string
}

note right of Selection::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    GetAsLookup $getaslookup
    SiteFields $sitefields
    ?\JDatabaseDriver $db = null
end note

note right of Selection::get
  Get Data Selection of the dynamic get

  since: 3.2.0
  return: ?array
  
  arguments:
    string $methodKey
    string $viewCode
    string $string
    string $asset
    string $as
    string $type
    ?int $rowType = null
end note

note right of Selection::name
  Get the Admin view table name

  since: 3.2.0
  return: string
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

