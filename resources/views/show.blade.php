<html>
<li>user: {{ $user }}</li>
<li>referral code: {{ $user->referralCode?->code ?: "none" }}</li>
<li>records: {{ $user->referralRecords }}</li>
</html>
