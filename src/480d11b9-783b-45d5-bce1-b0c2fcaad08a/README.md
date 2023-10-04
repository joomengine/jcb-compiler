```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class PermissionViews (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Builder**
> extends: **MapperDouble**
```uml
@startuml
class PermissionViews << (F,LightGreen) >> #RoyalBlue {
  + build() : string
  # firstKey(string $key) : string
  # secondKey(string $key) : string
}

note right of PermissionViews::build
  Get the build view content

  since: 3.2.0
  return: string
end note

note right of PermissionViews::firstKey
  Model the first key

  since: 3.2.0
  return: string
end note

note right of PermissionViews::secondKey
  Model the second key

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

