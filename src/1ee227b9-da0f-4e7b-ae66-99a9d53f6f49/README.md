```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Header (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\JoomlaFour**
> extends: ****
```uml
@startuml
class Header << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Event $event
  # Placeholder $placeholder
  # Language $language
  # UikitComp $uikitcomp
  # AdminFilterType $adminfiltertype
  # Category $category
  # AccessSwitchList $accessswitchlist
  # Filter $filter
  # Tags $tags
  # array $headers
  # string $NamespacePrefix
  # string $ComponentName
  # string $ComponentNamespace
  + __construct(Config $config, Event $event, ...)
  + get(string $context, string $codeName) : string
  # getHeaders(string $context) : array
  # setHelperClassHeader(array $headers, string $target_client) : void
}

note right of Header::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Event $event
    Placeholder $placeholder
    Language $language
    UikitComp $uikitcomp
    AdminFilterType $adminfiltertype
    Category $category
    AccessSwitchList $accessswitchlist
    Filter $filter
    Tags $tags
end note

note right of Header::get
  Get the headers for a file

  since: 3.2.0
  return: string
end note

note right of Header::getHeaders
  Get the headers for a file

  since: 3.2.0
  return: array
end note

note right of Header::setHelperClassHeader
  set Helper Dynamic Headers

  since: 3.2.0
  return: void
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

